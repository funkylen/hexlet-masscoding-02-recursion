test-sod:
	./vendor/bin/phpunit tests --filter SumOfDigitsTest

test-pll:
	./vendor/bin/phpunit tests --filter ParseLinkedListTest

test-dc:
	./vendor/bin/phpunit tests --filter DeepCountTest

test-f:
	./vendor/bin/phpunit tests --filter FibonacciTest