<?php

namespace Parasut\Service;

interface ServiceInterface
{
    public function index($url);
    public function create($data);
    public function show($id);
    public function edit($id, $data);
    public function delete($id);
}