<?php
namespace gsposato\yii2bugsnag;

/**
 * Handles exceptions in web applications
 */
class BugsnagWebErrorHandler extends \yii\web\ErrorHandler
{
    use BugsnagErrorHandlerTrait;
}
