<?php

namespace Dhii\ShellInterop;

/**
 * Represents an error that happens while trying to run a shell command.
 *
 * For more information, please visit the
 * {@link https://github.com/dhii/shell-interop dhii/shell-interop} repo
 *
 * @since [*next-version*]
 *
 * @author Dhii Team <development@dhii.co>
 */
interface ShellExceptionInterface
{
    /**
     * Get the text of the command that was being run.
     *
     * @since [*next-version*]
     *
     * @return string The text of the command that was being run.
     */
    public function getCommandText();

    /**
     * Get the instance of the command that was being run.
     *
     * @since [*next-version*]
     *
     * @return CommandInterface|null The instance of the command that was being available.
     *                               If no command instance available, null.
     */
    public function getCommand();
}
