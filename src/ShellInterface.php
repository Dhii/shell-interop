<?php

namespace Dhii\ShellInterop;

/**
 * This is a standard interface for shell wrappers.
 *
 * For more information, please visit the
 * {@link https://github.com/dhii/shell-interop dhii/shell-interop} repo
 *
 * @since [*next-version*]
 *
 * @author Dhii Team <development@dhii.co>
 */
interface ShellInterface
{
    /**
     * Used to run a shell command.
     *
     * @since [*next-version*]
     *
     * @param string|mixed|CommandInterface $command Something that represents a shell ccommand.
     *
     * @throws ShellExceptionInterface If command cannot be run.
     *
     * @return CommandResultInterface An object that represents the command result.
     */
    public function run($command);
}
