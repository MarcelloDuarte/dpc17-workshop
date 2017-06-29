<?php

describe("Lesson 2", function() {
    it("is exercise 2c: implementing Option", function() {
        expect(maybeDivBy(0)(4))->toEqual(new None());
        expect(maybeDivBy(2)(4))->toEqual(new Some(2));
    });
});