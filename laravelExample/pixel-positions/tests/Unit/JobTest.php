<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertTrue;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */

     use RefreshDatabase;
    public function test_a_job_belongs_to_an_employer(): void
    {
        //Arrange
        $employer= Employer::factory()->create([]);
        $job= Job::factory()->create([
            'employer_id'=>$employer->id
        ]);

        //Act and Assert

        assertTrue($job->employer->is($employer));
    }

    public function test_can_have_tags(): void
    {
        //Arrange
        $job= Job::factory()->create([]);

        //Act and Assert
        $job->tag('Frontend');

        assertCount(1,$job->tags);

    }


}
