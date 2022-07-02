<?php

require "../vendor/autoload.php";
require "../error.php";

    $inputs = range(0,200);
    $numInputsPerTask = 20;
    $inputGroups = array_chunk($inputs, $numInputsPerTask);
    $numCpus = 10; // I would nomrally dynamically fetch this and sometimes large (e.g. aws C5 instances)
    $numTasks = count($inputGroups);
    $numThreads = min($numTasks, $numCpus); // don't need to spawn more threads than tasks.
    $pool = new Pool($numThreads);
    $tasks = array(); // collection to hold all the tasks to get the results from afterwards.

    foreach ($inputGroups as $inputsForTask)
    {
        $task = new MyTask($inputsForTask);
        $tasks[] = $task;
        $pool->submit($task);
    }


    while ($pool->collect());

    # We could submit more stuff here, the Pool is still waiting for work to be submitted.

    $pool->shutdown();

class MyTask extends Threaded 
{
    private $m_inputs;
    private $m_outputs;


    public function __construct(array $inputs)
    {
        $this->m_inputs = $inputs;
        $this->m_outputs = new Threaded(); // we will store the results in here.
    }


    public function run() 
    {
        foreach ($this->m_inputs as $input)
        {
            // casting the array to an array is not a mistake
            // but actually super important for this to work
            // https://github.com/krakjoe/pthreads/issues/813#issuecomment-361955116
            $image = \WideImage\WideImage::loadFromFile('og_pizza.jpg');
            $canvas = $image->getCanvas();
            $canvas->useFont('../fonts/arialblack.ttf', 100, $image->allocateColor(76, 75, 75)); 
            $name = $this->generateRandomString();
            $canvas->writeText('42', '135', $name);
            $file = 'images/'.$name.rand(1,100).'.jpg';
            $file = str_replace(' ', '_', $file);
            $image->saveToFile($file);

        }
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    # Accessors
    public function getResults() { return $this->m_outputs; }
}