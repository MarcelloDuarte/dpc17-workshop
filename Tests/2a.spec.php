<?php

describe("Lesson 2", function() {
    it("is exercise 2a: implementing compose", function() {
        $f = function($x) { return $x * 3; };
        $g = function($x) { return $x + 5; };
        $h = compose($f, $g);
        expect($h(9))->toBe(32);
    });
});