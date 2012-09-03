<?php

/*
 * This file is part of the Tala package.
 *
 * (c) Adrian Macneil <adrian.macneil@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tala\Payments\Response;

/**
 * Response interface
 *
 * @author  Adrian Macneil <adrian.macneil@gmail.com>
 */
interface ResponseInterface
{
    /**
     * Does the request require a redirect?
     */
    public function isRedirect();

    /**
     * Was the request successful?
     */
    public function isSuccessful();

    /**
     * Gets the response message from the payment gateway.
     */
    public function getMessage();
}