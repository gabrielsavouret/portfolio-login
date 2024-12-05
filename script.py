import hashlib
import sys

def hash(password):
    return hashlib.sha256(password.encode('utf-8')).hexdigest()

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: script.py <password>")
        sys.exit(1)
    
    password = sys.argv[1]
    print(hash(password))