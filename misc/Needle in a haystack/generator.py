import os
import random
import string

ROOT_NAME = "challenge_files"
DEPTH = 4          # How many folders deep
BREADTH = 5        # How many folders per level
FILES_PER_DIR = 5  # How many junk files per folder
FLAG = "CTF{y0u_f0und_th3_n33dl3}"

def random_string(length=8):
    return ''.join(random.choices(string.ascii_lowercase + string.digits, k=length))

def create_structure(current_path, current_depth):
    if current_depth > DEPTH:
        return

    os.makedirs(current_path, exist_ok=True)

    # Create junk files
    for _ in range(FILES_PER_DIR):
        file_name = f"{random_string()}.txt"
        with open(os.path.join(current_path, file_name), "w") as f:
            f.write(f"Nothing here but junk data: {random_string(20)}")

    for _ in range(BREADTH):
        sub_dir = random_string(6)
        create_structure(os.path.join(current_path, sub_dir), current_depth + 1)

def hide_flag():
    all_dirs = [x[0] for x in os.walk(ROOT_NAME)]
    random_target = random.choice(all_dirs)
    
    flag_file = os.path.join(random_target, "flag.txt")
    with open(flag_file, "w") as f:
        f.write(FLAG)
    print(f"Flag hidden in: {flag_file}")

if __name__ == "__main__":
    if not os.path.exists(ROOT_NAME):
        create_structure(ROOT_NAME, 0)
        hide_flag()
        print(f"Done! Challenge folder '{ROOT_NAME}' created.")
    else:
        print("Folder already exists. Delete it and run again.")