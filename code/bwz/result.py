txt=">P13010\nALEAELAALRQRHAEPSRVGELFQRELRELRAQLEEASSARAQALLERDGLAEEVQRLRA"
length=20
amino_acid="A"
align_one=["X" for i in range(29)]
all=""
for line in txt.split(">"):
    protein=[]
    aligns=line.split("\n")
    for i in range(1,len(aligns)):
        protein.extend(aligns[i])
    if(protein==[]):
        continue
    sits=[]
    ans=""
    for i in range(len(protein)):
        if(protein[i]==amino_acid):
            sits.append(i)
    for sit in sits:
        align_one=["X" for i in range(length*2+1)]
        cont=length-1
        for i in range(sit-1,max(-1,sit-length-1),-1):
            align_one[cont]=protein[i]
            cont-=1
        cont=length
        for i in range(sit,min(len(protein),sit+length+1)):
            align_one[cont]=protein[i]
            cont+=1
        ans=ans+"".join(align_one)+"\n"
    all+=ans+"\n"
file=open("result.txt","w")
file.write(all)