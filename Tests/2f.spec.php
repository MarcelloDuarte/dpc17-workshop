<?php

describe("Lesson 2", function() {
    it("is exercise 2f: implementing flatmap for Option", function() {
        $plusOne = function($x) { return new Some($x + 1); };
        expect((new Some(2))->flatMap($plusOne))->toEqual(new Some(3));
        expect((new None())->flatMap($plusOne))->toEqual(new None());
    });
});