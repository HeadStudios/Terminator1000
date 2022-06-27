<?php
namespace Whoops\Example;

/* Please change the commented out lines to JsonResponseHandler() when pushing API live for AirTable integration */

use Exception as BaseException;
//use Whoops\Handler\JsonResponseHandler;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class Exception extends BaseException
{
}

$run     = new Run();
//$handler = new JsonResponseHandler();
$handler = new PrettyPageHandler();

// Only add this if you are using the Pretty Page Handler
$handler->addDataTable('Ice-cream I like', [
    'Everything' => 'yes',
    'Coffee & chocolate' => 'a lot',
    'Strawberry & chocolate' => 'it\'s alright',
    'Vanilla' => 'ew',
]);

$handler->setApplicationPaths([__FILE__]);


// Comment this addDataTableCallback if switching to JSON
$handler->addDataTableCallback('Details', function(\Whoops\Exception\Inspector $inspector) {
    $data = array();
    $exception = $inspector->getException();
    if ($exception instanceof SomeSpecificException) {
        $data['Important exception data'] = $exception->getSomeSpecificData();
    }
    $data['Exception class'] = get_class($exception);
    $data['Exception code'] = $exception->getCode();
    return $data;
});



$run->pushHandler($handler);

// Example: tag all frames inside a function with their function name
$run->pushHandler(function ($exception, $inspector, $run) {

    $inspector->getFrames()->map(function ($frame) {

        if ($function = $frame->getFunction()) {
            $frame->addComment("This frame is within function '$function'", 'cpt-obvious');
        }

        return $frame;
    });

});

$run->register();