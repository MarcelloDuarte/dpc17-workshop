<?php

describe("Lesson 2", function() {
    it("is exercise 2d: implementing Left", function() {
        expect(new Left(""))->not->toEqual(new Left("Division by zero"));
    });

    it("is exercise 2d: implementing Right", function() {
        expect(new Right(4))->not->toEqual(new Right(2));
    });

    it("is exercise 2d: implementing Either", function() {
        expect(eitherDivBy(0)(4))->toEqual(new Left("Division by zero"));
        expect(eitherDivBy(2)(4))->toEqual(new Right(2));
    });
});