<?php
def categorize_skill(nim, name, gender, major, skill_scores):
total_score = sum(skill_scores)

if total_score < 0 or total_score > 150:
    category = "tidak memadai"
elif total_score < 40:
    category = "kurang"
elif total_score < 60:
    category = "cukup"
elif total_score < 100:
    category = "baik"
else:
    category = "sangat baik"

email = "{}@gmail.com".format(name.lower().replace(" ", ""))

print("NIM              : {}".format(nim))
print("Nama             : {}".format(name))
print("Jenis Kelamin    : {}".format(gender))
print("Program Studi    : {}".format(major))
print("Skill Scores     : {}".format(skill_scores))
print("Skor Skill       : {}".format(total_score))
print("Kategori Skill   : {}".format(category))
print("Email            : {}".format(email))

categorize_skill("02023111", "Ahmad Budiman", "L", "TI", [80, 85, 90, 75, 85])
?>
