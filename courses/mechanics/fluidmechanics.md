# Fluid Mechanics

- [Fluid Mechanics](#fluid-mechanics)
  - [Textbook](#textbook)
  - [Lecture 1 - Introduction](#lecture-1---introduction)

## [Textbook](http://benjaminklassen.com/documents/courses/fluid/fluidtextbook.pdf)

## Lecture 1 - Introduction

Water exists in 3 states. Below is a comparison amongth these.

- solids are tightly packed. Holds shape w/o container. The molecules are not mobile due to strong intermolecular forces, causing small molecular spacing
- liquids are less packed. Takes shape of container. Molecules freely move even though there are strong intermolecular forces, causing small molecular spacing
- gases are very free. Expand to fill closed container. Molecules move freely w/ interaction, and have large molecular spacing

|Attribute|Solid|Liquid|Gas|
|----|----|----|----|
|Density|Higher|Higher|Lower|
|Shear Stress Effect|Deformation|Flow, Continual def|Flow, cont. def|
|Normal Stress Effect|Def|Def|Def|
|Compressibility|Difficult|Difficult|Easier|
|Viscosity|N/A|Higher; dec. as temp inc.|Lower; inc. as temp inc.|

**Fluid**: a substance that continually deforms under shear stress. Liquids and gases are both fluids

- special materials exist where solids behave like liquids
- fluids of interest are liquid water and gaseous air between temperature of 0º - 40º C
- for air, N = 78.08%, O = 20.95%, Argon = 0.93%, carbon dioxide = 0.035%

**Fluid Mechanics**: study of fluids under all conditions of rest and motion. 3 categories:

1. Statics (fluids at rest)
2. Kinematics (fluids in motion w/o considering cause of motion)
3. Dynamics (fluids in motion considering the causes of motion)

**Hydraulics**: science that deals w/ mechanical behaviour of water at rest or in motion

- more empirical than fluid mechanics, occuring on a large scale

**Dimension**: measurement w/o units

- **Primary dimension**: dims upon which other dims are based
- **Secondary/Derived dimension**: expressed using primary dims

2 systems of dims:

|System|Primary Dims|Derived Dims|
|----|----|----|
|MLT System|Mass (M)|Force (F) = (ML)/(T^2)|
||Length (L)||
||Time (T)||
||Temperature ($\theta$||
|FLT System|Force (F)|Mass (M) = (FT^2)/L|
||Length (L)||
||Time (T)||
||Temperature ($\theta$)||

![Units](https://i.imgur.com/oduQHve.png?1)

Mathematical equations must be dimensionally homogeneous to be correct. Check w/ dim balance

Eg. $R_e = \frac{\rho VD}{\mu}$, w/ $\rho$ being fluid density, $\mu$ being fluid dynamic viscosity. V being avg pipe velocity, D being pipe diameter, and R being Reynolds number is dimensionless. *Dims of viscosity ($\mu$)?*

1. Isolate for $\mu$
2. Sub in respective MLT or FLT units per variable
