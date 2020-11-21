<? php

public function PostFoo() {
    $foo = [
        'id' => '1',
        'name' => 'Foo',
        'description' => 'The best ever Foo.',
    ];
    Server::enqueue([new Response(200, [], json_encode(['status' => 'OK','Foo' => $foo], TRUE))]);
    $response = $this->client->GetFoo();

    self::assertInstanceOf(ResultInterface::class, $response);
    self::assertEquals($foo, $response->toArray()['Foo']);
}
