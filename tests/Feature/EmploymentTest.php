<?php

use App\Models\Employer;
use App\Models\Employment;
use App\Models\Tag;

// use function PHPUnit\Framework\assertTrue;

test('it belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $employment = Employment::factory()->create([
        'employer_id' => $employer->id
    ]);

    // assertTrue($employment->employer->is($employer));
    expect($employment->employer->is($employer))->toBeTrue();
});

test('it can have tags', function() {
    $employment = Employment::factory()->create();
    $employment->tags()->attach(Tag::factory()->create());
    expect($employment->tags)->toHaveCount(1);
});
