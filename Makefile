IMAGE     ?= syrian2012/php-benchmark
TAG       ?= dev
PLATFORMS ?= linux/amd64,linux/arm64

.PHONY: build test push versions clean

build:
	docker build -t $(IMAGE):$(TAG) .

# Runs the full 1000-task benchmark (~40s on modern hardware) and prints the result.
test: build
	@docker run --rm $(IMAGE):$(TAG) | grep -E "Total Time|Average Time"

versions:
	@printf 'base image php: '; docker image inspect php:8.5-cli --format '{{range .Config.Env}}{{if eq (slice . 0 11) "PHP_VERSION"}}{{.}}{{end}}{{end}}'
	@printf 'runtime   php: '; docker run --rm --entrypoint php $(IMAGE):$(TAG) -r 'echo PHP_VERSION, PHP_EOL;'

push:
	docker buildx build --platform $(PLATFORMS) \
		-t $(IMAGE):$(TAG) \
		-t $(IMAGE):latest --push .

clean:
	docker rmi $(IMAGE):$(TAG) >/dev/null 2>&1 || true
