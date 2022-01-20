sensors | awk -F, 'NR==3, NR==6 {print $1,$2}'
