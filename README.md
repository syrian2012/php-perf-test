# PHP Performance Test

Simple PHP performance benchmark. Lower result is better.

## Description

This repository contains a minimal PHP performance test that measures execution time for one thousand small tasks. Intended to run inside Docker for reproducible results.

## Requirements

- Docker (engine)

## Pre‑built Docker Image

A ready‑to‑use image is available on Docker Hub:

```bash
docker pull syrian2012/php-benchmark:latest
```

Run it directly:

```bash
docker run --rm syrian2012/php-benchmark:latest
```

No build step is required when using the pre‑built image.

## Build (optional)

If you prefer to build the image locally from the source, run this from the project root (where the `Dockerfile` and this `README` live):

```bash
docker build -t php-perf-test .
```

## Run

Print the benchmark result:

```bash
# Using the pre‑built image
docker run --rm syrian2012/php-benchmark:latest

# Using your locally built image
docker run --rm php-perf-test
```

## Interpreting Results

The output prints each task’s time. At the end you will see the total time and average. **Lower is better.** Compare results across runs or servers to evaluate performance changes.

Example output:

```
seconds<br />Task 998 Time: 0.0517 
seconds<br />Task 999 Time: 0.0518 
seconds<br />Task 1000 Time: 0.0513 
seconds<br /><br />Total Time for 1000 Tasks: 50.8036 seconds<br />Average Time per Task: 0.0508
```

## Troubleshooting

- Ensure the Docker daemon is running.
- If a local build fails, confirm the `Dockerfile` is present and you have network access for the base image.
- When pulling the pre‑built image, verify your internet connection and that you can reach Docker Hub.

## License

MIT

## Contact

For professional DevOps services, optimization, and consultation, contact me at [mhd4.hz@gmail.com](mailto:mhd4.hz@gmail.com).

---

*Enjoy with Love – Mohammad Haidar*
