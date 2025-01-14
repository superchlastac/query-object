<?php

namespace ADT\DoctrineComponents;

interface QueryObjectInterface
{
	public function by(array|string $column, mixed $value, bool $strict = false): static;
	public function orderBy(array|string $field, ?string $order = null): static;

	public function fetch(?int $limit = null): array;
	public function fetchIterable(): \Generator;
	public function fetchOne(bool $strict = true): object;
	public function fetchOneOrNull(bool $strict = true): object|null;

	public function fetchPairs(?string $value, ?string $key): array;
	public function fetchField(string $field): array;
}