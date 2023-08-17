# General Values

- [General Values](#General-Values)
  - [Slope Modifications](#Slope-Modifications)
  - [Development Length](#Development-Length)
  - [Min Steel](#Minimum-Steel)
  - [Typical Footing Sizes](#Typical-Footing-Sizes)
  - [Properties](#Properties)
  - [Beam Pocket](#Beam-Pocket)
  - [Baseplate](#Baseplates)

## Slope Modifications

Length increase

|	rise	|	run	|	angle	|	cosangle	|	1/cosangle	|
|	---	|	---	|	---	|	---	|	---	|
|	12	|	12	|	45	|	0.707106781	|	1.414213562	|
|	12	|	11	|	42.51044708	|	0.73715414	|	1.356568383	|
|	12	|	10	|	39.80557109	|	0.76822128	|	1.301708279	|
|	12	|	9	|	36.86989765	|	0.8	|	1.25	|
|	12	|	8	|	33.69006753	|	0.832050294	|	1.201850425	|
|	12	|	7	|	30.25643716	|	0.863778901	|	1.157703666	|
|	12	|	6	|	26.56505118	|	0.894427191	|	1.118033989	|
|	12	|	5	|	22.61986495	|	0.923076923	|	1.083333333	|
|	12	|	4	|	18.43494882	|	0.948683298	|	1.054092553	|
|	12	|	3	|	14.03624347	|	0.9701425	|	1.030776406	|
|	12	|	2	|	9.462322208	|	0.986393924	|	1.013793755	|
|	12	|	1	|	4.763641691	|	0.996545758	|	1.003466215	|

Bottom Bearing Length increase

|	Run	|	Rise	|	Angle	|	sinangle	|	1/sinangle	|
|	---	|	---	|	---	|	---	|	---	|
|	12	|	12	|	45	|	0.707106781	|	1.414213562	|
|	12	|	11	|	42.51044708	|	0.675724629	|	1.479892781	|
|	12	|	10	|	39.80557109	|	0.6401844	|	1.562049935	|
|	12	|	9	|	36.86989765	|	0.6	|	1.666666667	|
|	12	|	8	|	33.69006753	|	0.554700196	|	1.802775638	|
|	12	|	7	|	30.25643716	|	0.503871026	|	1.984634856	|
|	12	|	6	|	26.56505118	|	0.447213595	|	2.236067977	|
|	12	|	5	|	22.61986495	|	0.384615385	|	2.6	|
|	12	|	4	|	18.43494882	|	0.316227766	|	3.16227766	|
|	12	|	3	|	14.03624347	|	0.242535625	|	4.123105626	|
|	12	|	2	|	9.462322208	|	0.164398987	|	6.08276253	|
|	12	|	1	|	4.763641691	|	0.08304548	|	12.04159458	|

## Development Length

|	Tension Development Length f'c=20 (12.2.3)	|	ld (mm)	|
|	---	|	---	|
|	10M	|	370	|
|	15M	|	520	|
|	20M	|	630	|
|	25M	|	1020	|
|	30M	|	1210	|
|	Tension Development Length f'c=25 (12.2.3)	|	ld (mm)	|
|	10M	|	330	|
|	15M	|	470	|
|	20M	|	570	|
|	25M	|	910	|
|	30M	|	1080	|
|	Tension Development Length f'c=30 (12.2.3)	|	ld (mm)	|
|	10M	|	300	|
|	15M	|	530	|
|	20M	|	650	|
|	25M	|	830	|
|	30M		990	

Applicability:

	- Applicable if min ties (7.6.5) or min stirrup (11.2.8.2) within ld			
	- Increase if more than 300mm conc below, low density concrete			
	- Can be multiplied by utilization ratio, except for seismic requirements (21)			

|	Tension Development Length (12.2.2) f'c=20, 1.5" cover	|	ld	|
|	---	|	---	|
|	10M bars, no stirrups	|	300	|
|	15M bars, no stirrups	|	440	|
|	20M bars, no stirrups	|	650	|
|	25M bars, no stirrups	|	1350	|
|	30M bars, no stirrups	|	1890	|
|	Tension Development Length (12.2.2) f'c=20, 3" cover	|	ld	|
|	---	|	---	|
|	10M bars, no stirrups	|	300	|
|	15M bars, no stirrups	|	420	|
|	20M bars, no stirrups	|	510	|
|	25M bars, no stirrups	|	820	|
|	30M bars, no stirrups	|	970	|
|	Tension Development Length (12.2.2) f'c=25, 1.5" cover	|	ld	|
|	---	|	---	|
|	10M bars, no stirrups	|	300	|
|	15M bars, no stirrups	|	390	|
|	20M bars, no stirrups	|	580	|
|	25M bars, no stirrups	|	1210	|
|	30M bars, no stirrups	|	1700	|
|	Tension Development Length (12.2.2) f'c=25, 3" cover	|	ld	|
|	---	|	---	|
|	10M bars, no stirrups	|	300	|
|	15M bars, no stirrups	|	370	|
|	20M bars, no stirrups	|	460	|
|	25M bars, no stirrups	|	740	|
|	30M bars, no stirrups	|	870	|
|	Tension Development Length (12.2.2) f'c=30, 1.5" cover	|	ld	|
|	---	|	---	|
|	10M bars, no stirrups	|	300	|
|	15M bars, no stirrups	|	360	|
|	20M bars, no stirrups	|	530	|
|	25M bars, no stirrups	|	1110	|
|	30M bars, no stirrups	|	1550	|
|	Tension Development Length (12.2.2) f'c=30, 3" cover	|	ld	|
|	---	|	---	|
|	10M bars, no stirrups	|	300	|
|	15M bars, no stirrups	|	340	|
|	20M bars, no stirrups	|	420	|
|	25M bars, no stirrups	|	670	|
|	30M bars, no stirrups	|	790	|

Hooked Bars

|	Hooked Development Length f'c=20 (12.5.3)	|	ld (mm)	|
|	---	|	---	|
|	10M	|	260	|
|	15M	|	360	|
|	20M	|	440	|
|	25M	|	570	|
|	30M	|	670	|
|	Hooked Development Length f'c=25 (12.5.3)	|	ld (mm)	|
|	---	|	---	|
|	10M	|	230	|
|	15M	|	320	|
|	20M	|	390	|
|	25M	|	510	|
|	30M	|	600	|
|	Hooked Development Length f'c=30 (12.5.3)	|	ld (mm)	|
|	---	|	---	|
|	10M	|	210	|
|	15M	|	300	|
|	20M	|	360	|
|	25M	|	470	|
|	30M	|	550	|

## Minimum Steel

### Slabs

|	SLAB WIDTH (in)	|	MIN STEEL (0.002Ag)	|	SLAB WIDTH (mm)	|	MIN STEEL (0.002Ag)	|
|	---	|	---	|	---	|	---	|
|	6	|	100	|	150	|	300	|
|	8	|	125	|	200	|	400	|
|	10	|	175	|	250	|	500	|
|	12	|	200	|	300	|	600	|
|	14	|	225	|	350	|	700	|

Note:

- Steel not to be spaced less than min(500mm, 5 times slab thickness)

### Walls

Horizontal

|	WALL WIDTH (in)	|	MIN STEEL (0.002Ag)	|	WALL WIDTH (mm)	|	MIN STEEL (0.002Ag)	|
|	---	|	---	|	---	|	---	|
|	6	|	100	|	150	|	300	|
|	8	|	125	|	200	|	400	|
|	10	|	175	|	250	|	500	|
|	12	|	200	|	300	|	600	|
|	14	|	225	|	350	|	700	|


Note:

- Spacing max(3x wall thickness, 500mm)
- Bar diameter must not exceed 1/10 wall diameter

Vertical

|	WALL WIDTH (in)	|	MIN STEEL (0.002Ag)	|	WALL WIDTH (mm)	|	MIN STEEL (0.002Ag)	|
|	---	|	---	|	---	|	---	|
|	6	|	75	|	150	|	225	|
|	8	|	100	|	200	|	300	|
|	10	|	125	|	250	|	375	|
|	12	|	150	|	300	|	450	|
|	14	|	175	|	350	|	525	|

Note:

- Add (2) 15-M min at each end of wall
- Spacing max(3x wall thickness, 500mm)
- Bar diameter must not exceed 1/10 wall diameter

### Beams (flexural)

|	WIDTH (in)	|	MIN STEEL (f'c=20)	|	WIDTH (mm)	|	MIN STEEL (f'c=20)	|
|	---	|	---	|	---	|	---	
|	6	|	125	|	150	|	350	|
|	8	|	150	|	200	|	450	|
|	10	|	175	|	250	|	575	|
|	12	|	225	|	300	|	675	|
|	14	|	250	|	350	|	800	|
|	16	|	300	|	400	|	900	|
|	18	|	325	|	450	|	1025	|
|	WIDTH (in)	|	MIN STEEL (f'c=25)	|	WIDTH (mm)	|	MIN STEEL (f'c=25)	|
|	6	|	125	|	150	|	375	|
|	8	|	175	|	200	|	500	|
|	10	|	200	|	250	|	625	|
|	12	|	250	|	300	|	750	|
|	14	|	275	|	350	|	875	|
|	16	|	325	|	400	|	1000	|
|	18	|	350	|	450	|	1125	|
|	WIDTH (in)	|	MIN STEEL (f'c=30)	|	WIDTH (mm)	|	MIN STEEL (f'c=30)	|
|	6	|	150	|	150	|	425	|
|	8	|	175	|	200	|	550	|
|	10	|	225	|	250	|	700	|
|	12	|	275	|	300	|	825	|
|	14	|	300	|	350	|	975	|
|	16	|	350	|	400	|	1100	|
|	18	|	400	|	450	|	1250	|

## Typical Footing Sizes

|	Footing Size	|	Reinforcing	|
|	---	|	---	|
|	2.5x2.5x10	|	3-15M	|
|	3x3x12	|	3-15M	|
|	3.5x3.5x12	|	4-15M	|
|	4x4x12	|	4-15M	|
|	4.5x4.5x12	|	4-15M	|
|	5x5x14	|	5-15M	|
|	5.5x5.5x14	|	6-15M	|
|	6x6x16	|	7-15M	|
|	7x7x18	|	7-20M	|
|	8x8x20	|	9-20M	|
|	9x9x24	|	7-25M	|
|	10x10x26	|	8-25M	|

## Properties

![Rebar Sizes](https://i.imgur.com/Ci1vS1A.png)

## Beam Pocket

From 10.8.1

|	f'c	|	Bearing thickness	|	Flange width	|	Compressive resistance (kN)	|
|	---	|	---	|	---	|	---	|
|	20	|	76.2	|	152.4	|	128.322324	|
|	20	|	88.9	|	152.4	|	149.709378	|
|	20	|	101.6	|	152.4	|	171.096432	|
|	20	|	76.2	|	203.2	|	171.096432	|
|	20	|	88.9	|	203.2	|	199.612504	|
|	20	|	101.6	|	203.2	|	228.128576	|
|	20	|	76.2	|	254	|	213.87054	|
|	20	|	88.9	|	254	|	249.51563	|
|	20	|	101.6	|	254	|	285.16072	|
|	20	|	76.2	|	304.8	|	256.644648	|
|	20	|	88.9	|	304.8	|	299.418756	|
|	20	|	101.6	|	304.8	|	342.192864	|
|	25	|	76.2	|	152.4	|	160.402905	|
|	25	|	88.9	|	152.4	|	187.1367225	|
|	25	|	101.6	|	152.4	|	213.87054	|
|	25	|	76.2	|	203.2	|	213.87054	|
|	25	|	88.9	|	203.2	|	249.51563	|
|	25	|	101.6	|	203.2	|	285.16072	|
|	25	|	76.2	|	254	|	267.338175	|
|	25	|	88.9	|	254	|	311.8945375	|
|	25	|	101.6	|	254	|	356.4509	|
|	25	|	76.2	|	304.8	|	320.80581	|
|	25	|	88.9	|	304.8	|	374.273445	|
|	25	|	101.6	|	304.8	|	427.74108	|
								
- Assumes restrained against rotation at one or both ends								

## Baseplates

|	Load (kN)	|	Baseplate area Req'd (20 Mpa)	|	DIM (mm)	|	Plate thickness (in)	|
|	---	|	---	|	---	|	---	|
|	20	|	1809.954751	|	50.8	|	 1/4	|
|	40	|	3619.909502	|	76.2	|	 3/8	|
|	60	|	5429.864253	|	76.2	|	 1/2	|
|	80	|	7239.819005	|	101.6	|	 1/2	|
|	100	|	9049.773756	|	101.6	|	 5/8	|
|	120	|	10859.72851	|	127	|	 5/8	|
|	140	|	12669.68326	|	127	|	 3/4	|
|	160	|	14479.63801	|	127	|	 3/4	|
|	180	|	16289.59276	|	152.4	|	 3/4	|
|	200	|	18099.54751	|	152.4	|	 7/8	|
|	220	|	19909.50226	|	152.4	|	 7/8	|
|	240	|	21719.45701	|	152.4	|	 7/8	|
|	260	|	23529.41176	|	177.8	|	 7/8	|
|	280	|	25339.36652	|	177.8	|	1    	|
|	300	|	27149.32127	|	177.8	|	1    	|
|	320	|	28959.27602	|	177.8	|		|
|	340	|	30769.23077	|	177.8	|		|
|	360	|	32579.18552	|	203.2	|		|
|	380	|	34389.14027	|	203.2	|		|
|	400	|	36199.09502	|	203.2	|		|
								
- For HSS 4x4, (4) 5/8" BOLTS (EG WEDGE ANCHOR) on 7x7 PLATE								
- For HSS 6X6, (4) 5/8" BOLTS (EG WEDGE ANCHOR) on 9x9 PLATE								

## Bolts

|	Bolt	|	Spacing	|	Edge distance	|
|	---	|	---	|	---	|
|	 1/2	|	1.35	|	1.02	|
|	 5/8	|	1.69	|	1.10	|
|	 3/4	|	2.03	|	1.26	|
|	 7/8	|	2.36	|	1.50	|
|	1	|	2.70	|	1.73	|

## Weldments

![Weldments](https://i.imgur.com/NfHMKxY.png)

f=M/Sw (lbs/in force)

## Self-tapping Screws Steel Stud Values CSSBI Manual

![Self-tap 1](https://i.imgur.com/cWKM2mZ.png)

![Self-tap 2](https://i.imgur.com/P0S3Cmt.png)

Phi = 0.4 for these, though

## Nominal Schedules

![Schedules](https://i.imgur.com/HfvAKDB.png)

## OBC

Part 9?

- Area > 6455 ft^2 (600 m^2)
- Max Span of repetitive structural member = 12.2 m (40 ft) [9.4.2.1]
