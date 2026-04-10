import base64

def give_flag():
    flag = "z9bKytrN3+LgqezG6a3u96r9xvTgxung7fGp9+Q="
    flag = base64.b64decode(flag)
    returnflag = []
    
    for i in flag:
        returnflag.append(chr(0x99 ^ i))
    
    result = "".join(returnflag)
    print(result)


guess = input("Say the answer\n")

if guess == "the answer":
    give_flag()