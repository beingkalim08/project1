All_disease_symptoms_perc=[]

Total_symptoms=[('AGE_GRP_I'),
 ('AGE_GRP_II'), ('AGE_GRP_III'),('AGE_GRP_IV'),('BODY_PAIN'),
 ('Buisnessman'),('DRAINAGE_SYSTEM'),('DailyWageWorker'),
 ('Engineer'),('FEMALE'),('GENETIC_DISEASE'),('GovService'),
 ('HIGH_B.P'),('HealthCareWorker'),('IT_SectorJob'),
 ('InHouseWorker'), ('LOW_B.P'), ('MALE'), ('NON_SMOKER'),
 ('NORMAL_B.P'), ('NO_BODY_PAIN'),
 ('NO_DRAINAGE_SYSTEM'),('NO_GENETIC_DISEASE'),
 ('NO_PHYSICAL_EXCERCISE'),('Others'),
 ('PHYSICAL_EXCERCISE'),('SMOKER'),
 ('Student')]

#Different for different diseases

final_symptom={'PHYSICAL_EXCERCISE', 'NORMAL_B.P', 'LOW_B.P', 'NO_GENETIC_DISEASE', 'NON_SMOKER', 'NO_BODY_PAIN', 'BODY_PAIN', 'NO_PHYSICAL_EXCERCISE', 'FEMALE', 'MALE', 'DRAINAGE_SYSTEM', 'HIGH_B.P', 'GENETIC_DISEASE', 'SMOKER', 'NO_DRAINAGE_SYSTEM'}
contribution=[57, 63, 62, 57, 59, 56, 59, 56, 57, 59, 55, 66, 59, 58, 57]

#Calculating % of symptoms of particular disease

contribution_percentage=[]
sum1=sum(contribution)
for number in contribution:
    contribution_percentage.append(round((number/sum1)*100,1))
print(contribution_percentage)

#Storing % of symptoms of prticular disease

In_dis_cont_per=[0.0]*28
k=0
for symptom in final_symptom:
    y=Total_symptoms.index(symptom)
    In_dis_cont_per[y]=contribution_percentage[k]
    k+=1

print(In_dis_cont_per)
print()

#Storing data of various diseases in list
All_disease_symptoms_perc.append(In_dis_cont_per)
print(All_disease_symptoms_perc)
