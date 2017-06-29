<?php

describe("Lesson 2", function() {
    it("is exercise 2d: implementing Either", function() {
        expect(eitherDivBy(0)(4))->toEqual(new Left("Division by zero"));
        expect(eitherDivBy(2)(4))->toEqual(new Right(2));
    });
});