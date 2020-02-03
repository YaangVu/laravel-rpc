<?php

declare(strict_types=1);

namespace Sajya\Server;

abstract class Procedure
{
    /**
     * The name of the procedure that will be
     * displayed and taken into account in the search
     *
     * @var string
     */
    public static string $name;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Execute the procedure.
     *
     * @return array|string|integer
     */
    /*
    abstract public function handle();
    */
}
