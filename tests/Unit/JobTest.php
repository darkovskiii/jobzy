<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act and assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    // arrange
    $job = Job::factory()->create();
    $job->tag('Frontend');
    //act assert
    expect($job->tags)->toHaveCount(1);
});
