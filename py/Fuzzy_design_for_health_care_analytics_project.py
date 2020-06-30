#! C:/Users/user/AppData/Local/Programs/Python/Python37/python.exe
#Association Rule mining using Apriori Algorithm

import csv
import matplotlib.pyplot as plt 
from itertools import combinations

def select_disease(number):
    switcher={
        1:'Seabies',
        2:'Anaemia',
        3:'Dengue',
        4:'Neurities',
        5:'Measles',
        6:'Dysentry',
        7:'Pneumonia',
        8:'Typhoid',
        9:'EntericFever',
        10:'Bronchitis',
        11:'Acidity',
        12:'RespiratoryTrackInfection',
        13:'Gout',
        14:'Gastroentrytis',
        15:'Asthma',
        16:'Anoroxia',
        17:'Tuberculosis',
        18:'ChickenPox',
        19:'Diarrhoea',
        20:'HighBloodPressure',
        21:'CommonCold'
        }
    return switcher.get(number,"Invalid key selection")

def frequency_counter(total_TID,key_list,Current_dict):
    for i in range(0,total_TID):
        for j in range(0,len(key_list)):
            flag=0
            for element in key_list[j]:
                if(element not in TID_list[i]):
                    flag=1
                    break
            if(flag==0):
                Current_dict[key_list[j]]+=1

    return Current_dict

#Disease list
Disease_list=  ['Seabies', 'Anaemia', 'Dengue', 'Neurities', 'Measles',
                'Dysentry', 'Pneumonia', 'Typhoid', 'EntericFever', 'Bronchitis',
                'Acidity', 'RespiratoryTrackInfection', 'Gout', 'Gastroentrytis',
                'Asthma', 'Anoroxia', 'Tuberculosis', 'ChickenPox', 'Diarrhoea',
                'HighBloodPressure', 'CommonCold']

print("***** Disease List *****")
for i in range(0,len(Disease_list)):
    print(i+1," ",Disease_list[i])
num=int(input("Enter a number to select a disease : "))
disease_name=select_disease(num)

min_support_count=int(input("Enter minimum support count(Atleast 500 for simplicity) "))

'''
Reading Data from CSV file
'''
TID_list=[]
c_list=[]


with open('../Data/ModifiedPatientDetails.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    cases=0
    for row in csv_reader:
        list_2=[]
        if row[10] == disease_name:
            cases+=1
            list_2=[row[1],row[2],row[3],row[4],row[5],row[6],row[7],row[8],row[9]]
            TID_list.append(list_2)
            c_list.extend(list_2)
        line_count+=1
        
    print("Total case ",cases)
    print("line count ",line_count)
    
            
total_TID=cases

''' Apriori Algorithm to find frequent
     item sets '''


set1=set(c_list)
keys=len(set1)
print("Total different input ",keys)
print()
print("*** Apriori Algorithm ****")
print()
c1_data={}
set1=list(combinations(set1,1))
c1_data= dict.fromkeys(set1,0)

#Updating c1 list
c1_data=frequency_counter(total_TID,set1,c1_data)
print("c1_data ",c1_data)
print()

#Creating L1 list by removing key value pair
    #whose value is less than minimum support count

for j in range(0,len(set1)):
    if(c1_data[set1[j]]<min_support_count):
        del c1_data[set1[j]]

L_data=c1_data
print("L1_data ",L_data)

prev_L_data=[]
combination_flag=2
while(len(L_data)!= 0):
    print()
    array=[]
    key_list=list(L_data.keys())
    for i in range(0,len(L_data)):
        for element in key_list[i]:
            if element not in array:
                array.append(element)
    #print("array ",array)

    item=list(combinations(array,combination_flag))
    #print("item " ,item)
    combination_flag+=1
    item_len=len(item)

    c_data=dict.fromkeys(item,0)
    #print("c_data ",c_data)
    
    c_data=frequency_counter(total_TID,item,c_data)
    print("c_data_2 ",c_data)
    print()

    for j in range(0,item_len):
        if(c_data[item[j]]<min_support_count):
            del c_data[item[j]]

    prev_L_data.append(c_data)
    print("L data ",c_data)
    L_data=c_data

print("prev_L_data ",prev_L_data[-2])
print()
print("****************************************")

'''
Association Rule
'''
print()
print("**** Association Rule ****")
frequent_list=list(prev_L_data[-2].keys())
#print("frequent list ",frequent_list)

min_confidence=float(input("Enter minimum confidence "))
print("Required symptoms are ")
symptoms_list=[]
symptoms_list_2=[]
for j in range(0,len(frequent_list)):
    s_subset=frequent_list[j]
    subset=[]
    for i in range(1,len(s_subset)+1):
        subset.extend(list(combinations(s_subset,i)))
    print("subset ",subset)

    l_s_subset=[]
    for i in range(0,len(subset)-1):
        l_s_subset.append(list(set(s_subset)-set(subset[i])))
    
    print("l-s_subset ",l_s_subset)

    probability=dict.fromkeys(subset,0)
    key_no=len(subset)

    probability=frequency_counter(total_TID,subset,probability)
    #print("probability_count= ",probability)
    confidence=[]
    for i in range(0,key_no-1):
        confidence.append(round(probability[subset[key_no-1]]/probability[subset[i]],3))

    print("confidence ",confidence)

    for k in range(0,len(confidence)):
        if(confidence[k] >= min_confidence):
            symptoms_list.append(subset[k])
            symptoms_list_2.extend(subset[k])
            #print(subset[k])
    print()

print("**********************************")
print()
#print(set(symptoms_list))
print("Symptoms list ")
for element in set(symptoms_list):
    print(element)

symptoms_set=set(symptoms_list_2)
print()
print("*** Final symptoms_set ***")
print(symptoms_set)
length=len(symptoms_set)

# defining labels
symptoms=list(symptoms_set)

slices=[]
limit=len(symptoms_list_2)
for k in range(0,length):
    count=0
    for i in range(0,limit):
        if(symptoms[k]==symptoms_list_2[i]):
            count+=1
    slices.append(count)

#portion covered by each label
print("contribution ",slices)
max_cord = slices.index(max(slices))
explod = [0]*length
explod[max_cord] = 0.1
explode_2 = tuple(explod)

colors = ['b','g','r','m','y','tab:blue','tab:orange',
                'tab:green','tab:red','tab:purple','tab:brown','tab:pink',
                'tab:gray','tab.olive','c','k']

# plotting the pie chart
plt.pie(slices,labels = symptoms, colors=colors,
        startangle=90, shadow = True, explode = explode_2,
        radius = 1.2, autopct = '%1.1f%%')

#plotting legend
plt.legend(bbox_to_anchor=(1.65,1.025), loc="upper left") 

#showing the plot
plt.title(disease_name,y=1.11)
plt.show()
