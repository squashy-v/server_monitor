#!/bin/bash

systemctl status sshd | awk 'FNR==3 {print}'
