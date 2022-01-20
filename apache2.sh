#!/bin/bash

systemctl status apache2 | awk 'FNR==3 {print}'
