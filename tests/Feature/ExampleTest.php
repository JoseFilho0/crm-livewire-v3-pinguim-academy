<?php

test('the dashboard redirects guests to login', function () {
    $this->get('/')->assertRedirect(route('login'));
});
