<?php

namespace BeautyCoding\Notifier\Services;

use Illuminate\Support\Facades\Session;

class Notifier
{
    /**
     * Error message set
     * @param  string $message
     * @return void
     */
    public function error(string $message)
    {
        $this->message('error', $message);
    }

    /**
     * info message set
     * @param  string $message
     * @return void
     */
    public function info(string $message)
    {
        $this->message('info', $message);
    }

    /**
     * Success message set
     * @param  string $message
     * @return void
     */
    public function success(string $message)
    {
        $this->message('success', $message);
    }

    /**
     * Warning message set
     * @param  string $message
     * @return void
     */
    public function warning(string $message)
    {
        $this->message('warning', $message);
    }

    /**
     * Message sets
     * @param  string $type
     * @param  string $message
     * @return void
     */
    protected function message(string $type = 'success', string $message)
    {
        Session::put(sprintf('notifier.%s', $type), $message);
    }

}
