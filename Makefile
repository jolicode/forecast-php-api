cs: ## Fix CS violations
	./vendor/bin/php-cs-fixer fix --verbose

cs_dry_run: ## Display CS violations without fixing it
	./vendor/bin/php-cs-fixer fix --verbose --dry-run

generate_sdk: ## re-generates the SDK
	./vendor/bin/jane-openapi generate -c .jane-openapi.php

update_sdk: generate_sdk cs ## re-generates the SDK and fixes CS violations

.PHONY: help

help: ## Display this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
