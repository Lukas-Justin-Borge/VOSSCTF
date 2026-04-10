#Bob just found an unbreakable cipher called OTP!11!1! He is using it to encrypt all his messages:

#Plaintext 1:
plaintext = "I remember the time I had to wait for the one-time password (OTP) to arrive on my phone, nervously refreshing the screen because I knew it would expire in seconds."
bytes_plaintext = plaintext.encode()

#Ciphertext 1 (hex):
ciphertext1 = "ca62a3ad46327cae5dce8de42f4243318268d74f37ba997c8ad53db61b15fa3752301dd41d2a4dc992f48f4a29b960ab22d1cbffc7203a984f2006b524629eb438f5685069e6ec232f76089821753920fb43d00fcf8e895147cabbc5fb85a098d6cf3b44fad5ea54b4d8b1a6cdc768120c5081635b746ef6e117cad7ea8d8d71266b3803fbb28aba313aedb4cd17bf0792f8ff7cd18d8626f702fe66eb5921a75c5df8"
ciphertext1_bytes = bytes.fromhex(ciphertext1)

otp = bytes(a ^ b for a, b in zip(bytes_plaintext, ciphertext1_bytes))

print(otp.hex())


# Plaintext 2:
# ????


# Ciphertext 2 (hex):
ciphertext2 = "ea36a29748367da05dd8f2ff29423c318268d7300efb95"
ciphertext2_bytes = bytes.fromhex(ciphertext2)

plaintext = bytes(a ^ b for a, b in zip(ciphertext2_bytes, otp))

print(plaintext)


# Flag format:
# HSCTF{flag}