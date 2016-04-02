<?php

namespace Dhii\ShellInterop;

/**
 * Something that is a result of running a shell command.
 *
 * For more information, please visit the
 * {@link https://github.com/dhii/shell-interop dhii/shell-interop} repo
 *
 * @since [*next-version*]
 *
 * @author Dhii Team <development@dhii.co>
 */
interface CommandResultInterface
{

    /**
     * Retrive the text of the command that was run.
     *
     * @since [*next-version*]
     *
     * @return string The text of the command, for which this instance is the result.
     */
    public function getCommandText();

    /**
     * Retrieve the instance of the command that was run.
     *
     * @since [*next-version*]
     *
     * @return CommandInterface|null If available, the instance of the command
     *                               for which this instance is the result.
     */
    public function getCommand();

    /**
     * Retrieve the exit code of the command that was run.
     *
     * @since [*next-version*]
     *
     * @return int|null The exit code of the command, for which this instance is the result.
     */
    public function getExitCode();

    /**
     * Retrieve the output of the command that was run.
     *
     * @since [*next-version*]
     *
     * @return string The output given by the command, for which this instance is the result, to the stdout channel.
     */
    public function getStandardOutput();

    /**
     * Retrieve the error output of the command that was run.
     *
     * @since [*next-version*]
     * @return string|null The error output given by the command, for which this
     * instance is the result. If error output cannot be determined, null.
     */
    public function getErrorOutput();
}
