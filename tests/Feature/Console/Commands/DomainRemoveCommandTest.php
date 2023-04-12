<?php

it('has console/commands/domainremovecommand page', function () {
    $response = $this->get('/console/commands/domainremovecommand');

    $response->assertStatus(200);
});
