# Fracture Mechanics

## LEFM Stress Fields & Intensity Factor

Note: *Airy's stress function* satisfies stress equilibrium and compatibility if the biharmonic equation and traction BCs are satisfied. These are limited to smooth boundaries - thus, stress goes to approx infinite as distance from crack tip goes to zero

The three fracture modes are:

- Opening Mode I
- Sliding Mode II
- Tearing Mode III

### Westergaard Method

Westergaard utilized complex variable methods to satisfy the harmonic requirements.

He proposed the stress function $U=\phi+x\phi_4+y\phi_5$. Furthermore, for symmetric mode I problems, $U_I=Re\phi_1(z)+y\times{Im\phi_2(z)}$, with $\phi_1$ being first order integral of $\phi$ and $\phi_2$ being second order integral of $\phi$, and $\phi$ being a harmonic complex function. If $\phi$ is harmonic, U is biharmonic. For skew-symmetric problems (Mode II), Westergaard proposed that $U_{II}=y\times{Im\bar{\phi_{II}}}$. Many $\phi$ have been proposed, with correstonding stress and displacement fields (see lecture slides). Williams also proposed $\phi$ functions, which yielded slightly different fields.

Letting $\eta=z-a$, with a being the crack tip length, we can calculate the *stress intensity factor* if $\phi$ is known. See below:

$$K_I=\lim_{|\eta{|\to\infty}}\sqrt{2\pi\eta}\phi_I$$

For different loading conditions under the same crack mode, K is additive $K_I^1+K_I^2+\cdots$. If they are different modes, must use energy-based approach. Many analytical, numerical and experimental equations are included in the lecture slides.

The K-dominant region is the zone around the crack tip where $K_I$ contributes more than 95% of the opening stress at the crack tip.

Generally, brittle materials have a finite crack tip radius and exhibit plasticity at the crack tip:

1. Nonlinear deformation occurs within R
2. Singularity dominates within

When R is sufficiently small compared to (D,notch radius,plate thickness, crack length), singular stress field governed by K forms a useful approximation to the stress field in R<r<D. If R is too large, EPFM is required

*Irwin's Model* predicts the plastic zone size using a fictitious crack length past the crack such that $a_{eff}=a+\Delta{a_n}$. Irwin assumed:

- Circular plastic zone
- Elastic perfectly-plastic (stress in plastic zone remains at yield stress)
- Stress follows K-field outside plastic zone
- Crack length much greater than plastic zone size

See below:

The plastic zone size is as follows:

$$2r_p=\frac{(\frac{K_I}{\sigma_o^{\*}})^2}{\pi}$$

- $\sigma_0^{\*}=\sigma_o$
- $\sigma_0^{\*}=\frac{\sigma_o}{sqrt{(1-2*\upsilon)}}$

Standards state that plane stress or plane strain dominate depending on the size of $r_p$. Further, stress intensity factor and crack tip opening displacement formulae have been created for different cases

*Dugdale's Model* uses fictitious crack tips with yield stress resisting the crack opening at those points. The length of plastic zone, stress intensity factor and crack tip opening displacement can correspondingly be found

A third method is the *elasticity method*, which estimates the extend of plastic zone around the crack tip by finding the areas where the elastic stress field satisfies the yield criterion. Modelling can add a hardening parameter which increases accuracy

Plate thickness impacts fracture (Mode I). For thin plates, stress state can be assumed constant throughout plate thickness.

For thick plates, stress state is typically a combination of plane stress and plane strain, with plane stress on surface, plane strain in interior. Plane strain zone smaller due to higher constraing from surrounding material.

- If there was no crack, plate wound be in state of plane stress under far field stress
- Large stress normal to crack face makes the state triaxial

## Energy Methods - LEFM

|Stress Intensity|Energy Balance|
|---|---|
|Local|Global|
|Fracture when $K=K_c$ (fracture toughness)|Fracture when energy varies as characterised by energy release rate ERR (G)|

*Griffith* assumed:

- All materials contain population of fine cracks - at one crack, the theoretical strength is reached and crack grows
- Source of crack propagation energy is strain energy released as crack extends
- Growth of crack is from increase in surface energy
- Crack growth continues as the rate of released strain energy exceeds the energy required to form a new surface

The input energy, or work performed per unit time by applied loads, equals the rate of change of internal energy + rate of change of kinetic energy + energy spent per unit time increasing crack area. Internal energy is elastic strain energy + plastic work. For slow crack growth, kinetic energy is negligible. Griffith's fracture criterion (resistance of the material to crack growth. Material constant) is compared to the energy available for crack growth  $G=\frac{\partial{W}}{\partial{A}}-\frac{\partial{U^e}}{\partial{A}}=\frac{\partial{\Gamma}}{\partial{A}}=2\gamma$

- If $G<\frac{d\Gamma}{dA}$, no crack growth
- If $G=\frac{d\Gamma}{dA}$, crack growth

Strain energy computed by fixed-grip loading and dead-load loading. See below:

Load and displacement change during crack growth, which can be used to estimate G. Alternatively, using crack driving force with load as the parameter (G-a representation) can be helpful. See below:

Compliance = ??

K and G are brought together through the crack closure integral
