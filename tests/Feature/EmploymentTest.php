<?php

use App\Models\Employer;
use App\Models\Employment;

// use function PHPUnit\Framework\assertTrue;

test('it belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $employment = Employment::factory()->create([
        'employer_id' => $employer->id
    ]);

    // assertTrue($employment->employer->is($employer));
    expect($employment->employer->is($employer))->toBeTrue();
});
