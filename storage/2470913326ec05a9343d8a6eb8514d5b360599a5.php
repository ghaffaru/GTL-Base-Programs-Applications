<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <?php if(config('admin.show_environment')): ?>
            <!-- <strong>Env</strong>&nbsp;&nbsp; <?php echo env('APP_ENV'); ?> -->
            <strong> Ghana Tech lab &copy; 2019 </strong>
            
        <?php endif; ?>

        &nbsp;&nbsp;&nbsp;&nbsp;

        <?php if(config('admin.show_version')): ?>
        <!-- <strong>Version</strong>&nbsp;&nbsp; <?php echo \Encore\Admin\Admin::VERSION; ?> -->
        <?php endif; ?>

    </div>
    <!-- Default to the left -->
    <!-- <strong>Powered by <a href="https://github.com/z-song/laravel-admin" target="_blank">laravel-admin</a></strong> -->
</footer><?php /**PATH /home/ghaff/webapps/gtl-base-programs-application/vendor/encore/laravel-admin/src/../resources/views/partials/footer.blade.php ENDPATH**/ ?>