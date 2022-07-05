<?php
/**
 * @var string $currentPage
 * @var string[] $accessibleScripts
 * @var User $logged_in_user
 */

if (count(get_included_files()) == 1) {
    http_response_code(403);
    die("HTTP Error 403 - Forbidden");
}
?>

<?php if (!in_array($currentPage, $accessibleScripts)) { ?>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> <?= __("application_version") ?>
        </div>
        <?= __("application_copyright", ["present" => date('Y'), "name" => htmlentities(__("company_name"), ENT_QUOTES), "url" => __("company_url")]) ?>
    </footer>

    </div>
    <!-- ./wrapper -->

<?php } ?>

    <!-- jQuery 3 -->
    <script src="components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Validation Plugin -->
    <script src="components/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Common Functionality -->
    <script src="js/common.js?md5=FA3C704CF9C6AA46357B9A93283EF9B5"></script>
    <!-- toastr -->
    <script src="components/toastr/build/toastr.min.js"></script>
    <!-- Select2 -->
    <script src="components/select2/dist/js/select2.full.min.js"></script>

<?php if (!in_array($currentPage, $accessibleScripts)) { ?>

    <!-- DataTables -->
    <script src="components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="components/datatables.net-responsive-bs/js/responsive.bootstrap.min.js"></script>
    <!-- Code Prettify -->
    <script src="components/code-prettify/src/run_prettify.js?skin=desert"></script>
    <!-- FastClick -->
    <script src="components/fastclick/lib/fastclick.js"></script>
    <!-- Dropzone -->
    <script src="components/dropzone/dist/min/dropzone.min.js"></script>
    <script src="components/pusher-js/dist/web/pusher.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
    <!-- SMS Counter -->
    <script src="js/sms-counter.min.js"></script>

    <?php if (Setting::get("pusher_enabled")) { ?>
    <script>
        <?php if (!isset($_COOKIE["DEVICE_ID"])) { ?>
        if (Notification.permission !== 'granted') {
            Notification.requestPermission();
        }
        <?php } ?>

        let pusher = new Pusher('<?= Setting::get("pusher_key"); ?>', {
            cluster: '<?= Setting::get("pusher_cluster"); ?>'
        });

        const channel = pusher.subscribe('user-<?= $logged_in_user->getApiKey() ?>');

        channel.bind('messages-received', function (data) {
            let receivedCountElement = $('#received-count');
            if (receivedCountElement) {
                let totalReceived = 0;
                data.counts.forEach(function (item, index, arr) {
                    <?php if (isset($_COOKIE["DEVICE_ID"])) { ?>
                    if (item["deviceID"] !== <?= $_COOKIE["DEVICE_ID"]; ?>)
                    {
                        return;
                    }
                    <?php } ?>
                    totalReceived += item["totalReceived"];
                });
                receivedCountElement.text(totalReceived);
            }

            <?php if (!isset($_COOKIE["DEVICE_ID"])) { ?>
            if (Notification.permission === 'granted')
            {
                data.messages.forEach(function (item, index, arr) {
                    const notification = new Notification(item.number, {
                        icon: '<?= Setting::get("logo_src"); ?>',
                        body: item.message,
                    });
                    notification.onclick = function() {
                        <?php if ($currentPage === "messages.php") { ?>
                        window.location.href = 'messages.php?status=Received';
                        <?php } else { ?>
                        window.open('messages.php?status=Received');
                        <?php } ?>
                    };
                });
            }
            <?php } ?>
        });
    </script>
    <?php } ?>
<?php } ?>