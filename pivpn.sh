#!/bin/bash

sudo pivpn -c | awk 'FNR>4 {print}'
