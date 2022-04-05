<?php

namespace CodeviceCompany\LaravelUiKit\Tests\Components;

use CodeviceCompany\LaravelUiKit\Tests\TestCase;

class SelectTest extends TestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $this->assertComponentRenders(
            '<select name="country" class="block w-full shadow-sm sm:text-sm rounded-md focus:z-10 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50 ">
    <option value="ma">Morocco</option>
</select>',
            '<x-ui-select name="country">
     <option value="ma">Morocco</option>
 </x-ui-select>',
        );
    }

    /** @test */
    public function specific_attributes_can_be_overwritten()
    {
        $this->assertComponentRenders(
            '<select name="country" class="block w-full shadow-sm sm:text-sm rounded-md focus:z-10 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 focus:ring-2xl focus:ring-opacity-50 p-4" class="p-4">
    <option value="ma">Morocco</option>
</select>',
            '<x-ui-select name="country" id="country" class="p-4">
     <option value="ma">Morocco</option>
 </x-ui-select>',
        );
    }
}
