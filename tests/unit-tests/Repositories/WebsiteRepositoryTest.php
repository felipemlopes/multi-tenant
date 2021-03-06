<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://laravel-tenancy.com
 * @see https://github.com/hyn/multi-tenant
 */

namespace Hyn\Tenancy\Tests;

use Illuminate\Contracts\Foundation\Application;

class WebsiteRepositoryTest extends Test
{

    /**
     * @test
     */
    public function creates_website()
    {
        $this->websites->create($this->website);

        $this->assertTrue($this->website->exists);
    }

    protected function duringSetUp(Application $app)
    {
        $this->setUpWebsites();
        $this->setUpHostnames();
    }
}
