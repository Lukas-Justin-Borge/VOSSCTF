import subprocess

for i in range (0, 9999):
    pin = str(i).zfill(4)
    cmd = f"openssl enc -aes-256-cbc -d -p -in flag -k {pin} -iv 000000000000000000000000000000"
    result = subprocess.run(cmd, shell=True, capture_output=True)
    if b'VOSSCTF' in result.stdout or b'VOSSCTF' in result.stderr:
        print(result)
