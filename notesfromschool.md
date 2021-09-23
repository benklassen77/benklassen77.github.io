# General notes

## - Geo 23-Sept

**Triaxial test**: sample is first subjected to all round confinement. This is followed by vertical load applied by a piston until failure. Performed on fully saturated sands and clays, with typical height to diamater ratio 2:1 and diameter of 76mm-100mm

If there is no applied shear stress and the principal stresses are equal ($\sigma_1=\sigma_3$), shear stress on any plane is zero. This is known as **hydrostatic pressure**. See equation below:

$$\tau_{\theta}=\frac{(\sigma_1-\sigma_3)\sin{2\theta}}{2}-\sigma_{13}\cos{2\theta}$$

There are three stages to the triaxial test: consolidation, shearing, and then the final stress state. In *Stage 1*, all round confining stress is applied. In *Stage 2*, deviatoric stress is applied. This grows until it touches the mohr failure envelope.

There are 3 types of triaxial test. **Consolidated Drained** allows drainage during Stages 1 and 2. This allows no pore pressure and some volume change to be developed, and is used on sands. **Consolidated Undrained** allows drainage during Stage 1. This allows no pore pressure and some volume change in stage 1, but some pore pressure and no volume change in Stage 2, and is used on clays. **Unconsolidated Undrained** allows no drainage. Thus, there is pore pressure and no volume change, and is used only on clays.

Triaxial failure happens at $45\deg+\frac{\phi}{2}$. By geometry, the principal failure stresses can be found using the below (NOTE: these are only valid for any *failed* stress state:

$$N=\frac{1+\sin\phi}{1-\sin\phi}=\tan^2{(45+\frac{\phi}{2})}\tag{Flow Number}$$

$$\sigma_{1f}=\sigma_{3f}N+2c\sqrt{N}$$

## - Mech 3 23-Sept

Simplifications are typically made in 2D case. For example, beams assumed to only have bending stress as non-zero. A 3D understanding is req'd to understand the simplifications/

For any 3D state of stress, there are 3 mutually perpendicular planes, on which the shearing stress are zero. The normal stresses to these planes are **principle stresses**, and normals to the planes are **principle directions**. Principal stresses are important bc they introduce the failure criteria, such as Tresca and Von Mises. These form a stress tensor.

Since shear is zero, $(\sigma_{N_x}-\sigma{l})\vec{i}+(\sigma_{N_y}-\sigma{m})\vec{j}+(\sigma_{N_z}-\sigma{n})\vec{k}=0$. Therefore, the below are found:

$$\sigma_{xx}l+\sigma_{xy}m+\sigma_{xz}n-\sigma{l}=0$$

$$\sigma_{xy}l+\sigma_{yy}m+\sigma_{yz}n-\sigma{m}=0$$

$$\sigma_{xz}l+\sigma_{yz}m+\sigma_{zz}n-\sigma{n}=0$$

$$
\begin{bmatrix}
\sigma_{xx}-\sigma & \sigma_{xy} & \sigma_{xz}\\
\sigma_{xy} & \sigma_{yy}-\sigma & \sigma_{yz}\\
\sigma_{xz} & \sigma_{yz} & \sigma_{zz} - \sigma
\end{bmatrix}
\begin{bmatrix}
l\\m\\n
\end{bmatrix}
=
\begin{bmatrix}
0\\0\\0
\end{bmatrix}
$$

The matrix is *homogeneous* because RHS=0, and trivial solution impossible because $l^2+m^2+n^2=1$. Thus, the $\sigma$ values can be determined by taking the determinate of the stress matrix equal to zero.

Each distinct eigenvalue has a distinct eigenvector. Thus, if there are only two solutions, only two eigenvectors.

## Timber - 23-Sept

$M=\sigma{S}\tag{Moment}$, with $\sigma$ being stress and $S$ being section modulus. For steel, $M_r=\phi{F_yS}$, while for timber, $M_r=\phi{(f_bK_DK_HK_{Sb}K_T)}K_LK_{Zb}S$

**Load duration factor $K_D$**: depends on how long the load lasts

- 0.65 for long term (Permanent loads acting alone, and sustained live loads like library)
- 1.0 for standard term (live, snow; combined with permanent loads)
- 1.15 for short term (wind, seismic; combined with permanent loads)
- $1-0.5\log{\frac{\textrm{Long term}}{\textrm{Standard}}}$ if long term load greater than short term load. Minimum is 0.65

Add wood curve here

**Service Condition factor $K_S$**: Found in Table 6.10. It is based on the moisture impact on timber strength.  This is impacted by:

- material (glulam, sawn lumber)
- size of sawn lumber
- characteristic being considered (shear or bending)
- exposure to wet conditions (eg. deck, footbridge)
- for big timber, not only is it already high moisture, but the middle doesn't raining. This gives it higher strength parallel to grain. However, compression perpendicular to grain is the same for lumber and timber because same wet surface

**Treatment factor $K_T$**: Found in Table 6.11. Preservative treatment doesn't impact strength (except fire retardant), but incising does. Typically 4x and bigger are incised and 2x or lower are not

**System factor $K_H$**: Found in Table 6.12. Since not all members are the worst piece of wood, some strength is given back.

- allows for increased capacity when considering 3+ members no more than 610mm apart (share load)
- accounts for sheathing and fastener composite action
- applies to the joist system, stud wall, and built-up beam

**Size factor $K_z$**: Found in Table 6.13 (not for glulam). Larger volume of a member will tend to reduce the apparent strength - a phenomenon that exists to some extent in all materials but is more prounounced in timber. This is because there is a greater chance of a "fatal flaw".

- depends upon the type of member and the characteristic property being considered.

Tension Member Design

$$T_r=K_{Zt}\phi min{\{{F_{tn}A_n}|F_{tg}A_g}\}}$$

$\phi=0.9$ The net section force is bigger, but the net area is bigger than the gross area. This must not be less than 75% of gross section.

To find net section, subtract holes from shear plates, split rings etc. Holes must be between 1-2 mm diameter larger than bolt. Since nails or timber rivets don't reduce cross section, they aren't included. Finally, if $S>4a$, there is one row; else, 2 or more. See below:

Snip of handdrawn nails
