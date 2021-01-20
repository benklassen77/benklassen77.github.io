# Transportation Engineering Applications

## Info

- All content-related questions to Learn discussion board
- No textbook, but readings each week. Readings are not tested on, but help for understanding
- Assignments (pdf) 6% each, midterm (traffic engineering) 35%, final (travel forecasting) 35%
- [Syllabus](https://benklassen77.github.io/documents/courses/transpo/341syllabus.pdf)

## Introduction

Transportation - Purpose and objectives:

1. Provide **mobility**: move people and goods at an acceptable level of service
2. Provide **accessibility**: to economic and social activities, which are distributed over space and time. Mobility and accessibility go hand-in-hand
3. Provide **safety**: mitigate traffic fatalities and severe injuries
   - 2000 people killed and 165000 injured using Canada's road transportation system
4. Promote **economic prosperity**: bad transportation hurts the economy, while good transportation boosts the economy
5. Promote **environmental sustainability**: encourage sustainable development of land use and reduce energy consumption and pollutant emissions
   - transportation sector contributed 34% to anthropogenic GHG emissions in Ontario in 2012
   - 7 Gt CO2 equivalent of direct GHG emissions in 2010
6. Promote **equity**: essential accomplished by designing transportation system that are fair

Benefits of transportation

- fulfill demand, move people and goods
- emergency and defence benefits

Costs of transportation

- time
- energy, material and land use
- noise
- pollution
- accidents

Balance between benefit and cost

- plan, design, and operate a cost-effective system
- maximize benefits while minimizing costs

## Macroscopic Traffic Flow

### Traffic Flow Theory

- development of mathematical models or relationships between variables characterizing traffic flow
- useful for description and quantification of traffic flow, for all aspects of planning, design, and operations
- help build simulation models with artificial traffic behaving similar to reality

Analytical (deterministic) -> Simulation (stochastic)

- stochastic accounts for randomness and creates a distribution while analytical shows one answer

Modelling Approaches

- Macroscopic flow: deals with characteristics of the roadway. Each roadway segment has a flow, density, and speed
- Microscopic flow: deals with characteristics of individual vehicles. Each vehicle has a position, speed, and acceleration
- Mesoscopic (outside scope of course): takes stuff from both macroscopic and microscopic

### Macroscopic Variables

**Flow (q)**: number of units (eg. vehicles, people, etc) passing a point per unit time. The max flow is called the **capacity** (eg. veh/hr). Often max is 2000-2400 vehicles per hour. Alternatively, flow could be considered using the average headway betweeen vehicles, $\bar{h}$ as sec/vehicle. See below:

$$q=\frac{3600}{\bar{h}}\tag{Flow}$$

**Density (k)**: number of units (eg. vehicles) per unit length of the road at a given instant. Measured as veh/km. Ranges from 0-100 veh/km typically. Alternatively, density could be measured using the average gap between vehicles, $\bar{d}$. See below:

$$k=\frac{1}{\bar{d}}\tag{Density}$$

**Speed (u)**: distance travelled per unit time (km/hr).

$$q=k\cdot{u}\tag{Flow Relationship}$$

Flow is measured with pneumatic devices (tube), field observers, loop detectors (most common)

$$q = \frac{n}{T}$$

- n = number of detections, T is observation period

To measure density, **occupancy** is an approximation of density. This is the time between detections recorded. $O=\frac{\sum{t_i}}{T}$. However, knowing that $T=\frac{n}{q}$, it can be said that $O=\frac{\sum{t_i}q}{n}$. If $\sum{t_i}=\sum{\frac{l_i}{u_i}}$, this can be subbed into the equation as well. Assuming a constant speed,

$$O=\frac{q}{n}\cdot\frac{\sum{l_i}}{\bar{u}}=k\cdot{\bar{L}}\tag{Occupancy}$$

- $\bar{L}$ is average vehicle length

To measure speed, know that there are two types: Time Mean Speed (TMS) and Space Mean Speed (SMS). Temporal is just the mean of different speeds at a point, but spacial is a weighted average based on the amount of vehicles at each speed along a section of roadway. Spatial average is better.

$$u_t = \frac{1}{n}\sum{u_i}\tag{TMS}$$

$$u_s = \frac{n}{\sum{\frac{1}{u_i}}}\tag{SMS}$$

### Fundamental Diagrams

If speed is constant, q varies with k.

![Fundamental Eg. 1](https://i.imgur.com/Rbatjt1.png?1)![Fundamental Eg. 2](https://i.imgur.com/7KEdjZ1.png?1)

**Greenshields Model (u-k)**: boundaries at free flow and jam density. Assumed that $k_j$ = 0 in this model. It is also assumed that there is a linear relationship between these two points.

![Greenshield Model (u-k)](https://i.imgur.com/7qHrVx0.png?1)

The highway deviates from the conveyorbelt example because people break to increase distance. See below for Greenshields model (k-q)

![Greenshield Model (k-q)](https://i.imgur.com/QlD3wcG.png?1)

In Greenshield Model (q-u), optimal speed at half flow density. See below:

![Greenshield Model (q-u)](https://i.imgur.com/48H59HP.png?1)

Below is all three models

![All 3](https://i.imgur.com/Vfi9M6X.png?1)

From similar triangles,

$$u = u_f-\frac{u_f}{k_j}k$$

After multiplying both sides by u and k,

$$u^2=u_fu-\frac{u_f}{k_j}q$$

$$q=u_fk-\frac{u_f}{k_j}k^2$$

There are several important properties of greenshields model. The speed at max flow is half the free-flow speed (take derivative of q equation). The max flow also occurs at half the jam density. Thus, $q_{\textrm{max}}=u_ok_o=\frac{u_fk_j}{4}$

**Greenberg Model**: hypothesized that it wasn't a linear relationship. Rather, $u-c\ln{\frac{k_j}{k}}$. From here, see below

$$u=c\ln{k_j}-c\ln{k}$$

When multiplied by k,

$$q=ck\ln{k_j}-ck\ln{k}$$

When differentiating $\frac{dq}{dk}$, it equals $c\ln{k_j}-[clnk+ck(\frac{1}{k})]$. Setting this to zero, it is seen that the optimum density is $k_o=\frac{k_j}{e^1}$. $u_o=c$. $q_{\textrm{max}}=u_ok_o$

In comparison, greenshield produces speed of 0 at low density, while greenberg produces infinite speed at low density. Use the below to create lines of best fit:

![Best fit](https://i.imgur.com/GkrPhbx.png?1)

![R Squared](https://i.imgur.com/jtXO8Z9.png?1)

### Conservation/Continuity Equation

The continuity equation states that $\frac{\partial{k}}{\partial{t}}+\frac{\partial{q}}{\partial{x}}=r-s$, with r and s being on and off ramps. If there are no ramps, this is equal to zero. This is used to derive the following:

$$k_i(t+1)=k_i(t)+\frac{T}{\Delta_i}[q_{i-1}(t)-q_i(t)+r_i(t)-s_i(t)]$$

To do a complete macroscopic simulation:

1. Use conservation equation to update density *k*
2. Use fundamental diagrams to update speed *u*
3. Use definitional relationship to update flow *q*

The q used is the minimum between the demand flow leaving section i and the supply flow that can be accommodated at i+1. The demand flow, $q_D$ is $ku$ if $k<k_o$, and is $q_{max}$ if $k>k_o$. This is because it is the **demand** flow, not the capability flow. This is the supply flow. $q_s = q_{max} if k<k_o$, and $q_s = ku$ if $k>k_o$. This is because the density approaches the jam density.

Simulation captures some essential phenomena:

- decreasing speed with increasing density
- shock wave propagation
- consistent with a number of microsimulation models at steady state

Here are some limitations of the simulation

- instantaneous reaction of speed to density, implying infinite acceleration/deceleration rates
- fails to reproduce congestion instability (stop and go traffic) due to neglected dynamics
- flow downstream of congestion equals bottle neck capacity (not capturing start up delay)

To fix these, 2nd order models are created. These replace fundamental diagrams (Greenshield or Greenberg created for steady-state) with a dymanic mean-speed equation (Payne, 1979)
