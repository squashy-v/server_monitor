#!/bin/bash

systemctl status openvpn | awk 'FNR==3 {print}'
