<?php

namespace Dhii\ShellInterop;

/**
 * Something that represents a shell command.
 *
 * For more information, please visit the
 * {@link https://github.com/dhii/shell-interop dhii/shell-interop} repo
 *
 * @since [*next-version*]
 *
 * @author Dhii Team <development@dhii.co>
 */
interface CommandInterface
{
    /**
     * Get the text of the command to run.
     *
     * @since [*next-version*]
     *
     * @return string The final text of the command which is represented by this instance.
     */
    public function __toString();

    /**
     * Get the path to the command's working directory.
     *
     * @since [*next-version*]
     *
     * @return string|null The absolute path to the working directory where
     *                     this command should be run, if different from default.
     *                     See the 'cwd' parameter of {@link http://php.net/manual/en/function.proc-open.php proc_open()}
     *                     for more information.
     */
    public function getWorkingDirectory();

    /**
     * Get the environment variables for the command.
     *
     * @since [*next-version*]
     *
     * @return array|null A map of environment variables and their values, if different from default.
     *                    Otherwise, null, which means that the variables from the current PHP process should be used.
     *                    See the 'env' parameter of {@link http://php.net/manual/en/function.proc-open.php proc_open()}
     *                    for more information.
     */
    public function getEnvironment();

    /**
     * @since [*next-version*]
     *
     * @return array A map of additional options and their values.
     *               Currently these are Windows-specific options.
     *               See the 'other_options' parameter of {@link http://php.net/manual/en/function.proc-open.php proc_open()}
     *               for more information.
     */
    public function getOptions();
}
