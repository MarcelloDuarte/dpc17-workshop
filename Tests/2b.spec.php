<?php

describe("Lesson 2", function() {
    it("is exercise 2b: implementing curry", function() {
        $whereInAmsterdam = curry("strpos")("Amsterdam");
        expect($whereInAmsterdam("t"))->toBe(3);
    });
});