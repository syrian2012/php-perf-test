# PHP Performance Test

Simple PHP performance benchmark. Lower result is better.

## Description
This repository contains a minimal PHP performance test that measures execution time for a one thousand small task. Intended to run inside Docker for reproducible results.

## Requirements
- Docker (engine)

## Build
From the project root (where this README and Dockerfile live):

```bash
docker build -t php-perf-test .
```

## Run
Run the container and print the result:

```bash
docker run --rm php-perf-test
```

## Interpreting results
The output prints each task time, and at the end you will see the total time and avarage. Lower is better. Compare results across runs or servers to evaluate performance changes.

Example output:
```
seconds<br />Task 998 Time: 0.0517 
seconds<br />Task 999 Time: 0.0518 
seconds<br />Task 1000 Time: 0.0513 
seconds<br /><br />Total Time for 1000 Tasks: 50.8036 seconds<br />Average Time per Task: 0.0508
```

## Troubleshooting
- Ensure Docker daemon is running.
- If build fails, confirm Dockerfile is present and you have network access for the base image.

## License
MIT

## Contact
For professional DevOps services, optimization, and consultation, contact me at mhd4.hz@gmail.com.

enjoy with Love Mohammad Haidar