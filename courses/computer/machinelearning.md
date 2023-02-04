# Machine Learning

The following code uses a trained neural network to show how approximates are made to a real set of data.

```Matlab

data=readmatrix('N:\data2.csv')

T=data(:,1);
SR=data(:,2);
str=data(:,3);
S=data(:,4)

length_S=length(S);
S_new=zeros(500,1);
for i=1:length_S
    S_value=S(i)+randi([-1000,1000])/100;
    S_new(i)=S_value;
end
S_new=S_new';

%nnstart
input1=[T,SR,str]';
target1=S';
load("matlab.mat",'results')
load("matlab.mat",'results2')
%who

network56=results.Network;
output1=network56(input1);
network57=results2.Network;
output2=network57(input1);
axis square; box on; hold on
plot(target1,output2,'xr')
xlabel('Target Values')
ylabel('Predicted Values')
```

The following code trains a neural network on spatial data to approximate the snow load given a dataset.

```MATLAB

data=readmatrix('MATLAB_omitted.csv')
Lat=data(:,2);
Long=data(:,3);
Ss=data(:,4);
Sr=data(:,5);
q10=data(:,6);
q50=data(:,7);

input1=[Lat,Long]'
target1=Ss'
trainFcn = 'trainlm';  % Levenberg-Marquardt backpropagation.
% Create a Fitting Network
hiddenLayerSize = 7;
net = fitnet(hiddenLayerSize,trainFcn);
% Setup Division of Data for Training, Validation, Testing
net.divideParam.trainRatio = 70/100;
net.divideParam.valRatio = 15/100;
net.divideParam.testRatio = 15/100;
% Train the Network
[net,tr] = train(net,input1,target1);
% Test the Network
y = net(input1);
e = gsubtract(target1,y);
performance = perform(net,target1,y)
% View the Network
view(net)

n=100;
Lat_test=linspace(43.29,44.09,n);
Long_test=linspace(-79.8056,-81.7069,n);
Output=zeros(n,n);
TotalOutput=zeros(3,n^2);
for i=1:n
    for j=1:n
Output(i,j)=net([Lat_test(i);Long_test(j)]);
end end
[Lat_plot,Long_plot]=meshgrid(Lat_test,Long_test);
surf(Lat_plot,Long_plot,Output)
contourf(Lat_plot,Long_plot,Output)
```